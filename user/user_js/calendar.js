const weeks = ['日', '月', '火', '水', '木', '金', '土']
const date = new Date()
let year = date.getFullYear()
let month = date.getMonth() + 1
let pageCnt = 1
const config = {
    show: 1,
    pagemax: 3,
}

function showCalendar(year, month) {
    for ( i = 0; i < config.show; i++) {
        const calendarHtml = createCalendar(year, month)
        const sec = document.createElement('section')
        sec.innerHTML = calendarHtml
        document.querySelector('#calendar').appendChild(sec)

        month++
        if (month > 12) {
            year++
            month = 1
        }
    }
}

function createCalendar(year, month) {
    const startDate = new Date(year, month - 1, 1) // 月の最初の日を取得 (Sat Feb 01 2020)
    const endDate = new Date(year, month,  0) // 月の最後の日を取得(Sat Feb 29 2020)
    const endDayCount = endDate.getDate() // 月の末日(29)
    const lastMonthEndDate = new Date(year, month - 1, 0) // 前月の最後の日の情報
    const lastMonthendDayCount = lastMonthEndDate.getDate() // 前月の末日(31)
    const startDay = startDate.getDay() // 月の最初の日の曜日を取得(6)
    let dayCount = 1 // 日にちのカウント
    let calendarHtml = '' // HTMLを組み立てる変数

    const date = new Date()
    let t_year = date.getFullYear()
    let t_month = date.getMonth() + 1
    let t_day = date.getDate()

    calendarHtml += '<table>'
    calendarHtml += '<tr>'
    calendarHtml += '<td colspan="7" class="calendar_index">' + year  + '年' + month + '月' + '</td>'
    calendarHtml += '</tr>'

    // 曜日の行を作成
    for (let i = 0; i < weeks.length; i++) {
        calendarHtml += '<td>' + weeks[i] + '</td>'
    }

    if(startDay + endDayCount <= 7*5){
        maxWeek = 5
    }else{
        maxWeek = 6
    }

    for (let w = 0; w < maxWeek; w++) {
        calendarHtml += '<tr>'

        for (let d = 0; d < 7; d++) {
            if (w == 0 && d < startDay) {
                // 1行目で1日の曜日の前は非表示
                let num = lastMonthendDayCount - startDay + d + 1
                calendarHtml += '<td class="is-disabled">' + num + '<br>-</td>'
            } else if (dayCount > endDayCount) {
                // 末尾の日数を超えたら非表示
                let num = dayCount - endDayCount
                calendarHtml += '<td class="is-disabled">' + num + '<br>-</td>'
                dayCount++
            } else if (dayCount < t_day && year == t_year && month == t_month) {
                //今月の今日以前は選択付加
                calendarHtml += '<td>'+ dayCount +'<br>-</td>'
                dayCount++
            } else if ((year <= t_year && month < t_month) || (year < t_year)) {
                //今月以前は選択付加
                calendarHtml += '<td>'+ dayCount +'<br>-</td>'
                dayCount++
            } else {
                let dayId = year+'/'+month+'/'+dayCount
                calendarHtml += '<td class="calendar_td" id="'+dayId+'">'+ dayCount +'<br><a href="#'+dayId+'" class="day_click" data-date="'+dayId+'">〇</a></td>'
                dayCount++
            }
        }
        calendarHtml += '</tr>'
    }

    calendarHtml += '</table>'

    return calendarHtml
}

function moveCalendar(e) {
    document.querySelector('#calendar').innerHTML = ''

    if (e.target.id === 'prev') {
        month--
        pageCnt--

        if (month < 1) {
            year--
            month = 12
        }
    }

    if (e.target.id === 'next') {
        month++
        pageCnt++

        if (month > 12) {
            year++
            month = 1
        }
    }

    if(pageCnt == 1){
        document.getElementById('prev').disabled = true;
    }else{
        document.getElementById('prev').disabled = false;
    }

    if(pageCnt == config.pagemax){
        document.getElementById('next').disabled = true;
    }else{
        document.getElementById('next').disabled = false;
    }

    showCalendar(year, month)
}

function pageCalendar(e){
    if (e.target.id === 'prev') {
        pageCnt--
    }
    if (e.target.id === 'next') {
        pageCnt++
        console.log(pageCnt)
    }

}

document.querySelector('#prev').addEventListener('click', moveCalendar)
document.querySelector('#next').addEventListener('click', moveCalendar)

document.addEventListener("click", function(e) {
    if(e.target.classList.contains("day_click")) {
        document.getElementById('hidden_date').innerHTML = '<input type="hidden" name="date" value="'+ e.target.dataset.date + '">'
    }
})

document.getElementById('prev').disabled = true
showCalendar(year, month)
