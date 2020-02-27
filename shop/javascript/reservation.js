// const weeks = ['日', '月', '火', '水', '木', '金', '土']
// const date = new Date()
// let year = date.getFullYear()
// let month = date.getMonth() + 1
// let day = date.getDate();
// console.log(date)
// let pageCnt = 1
// const config = {
//     show: 1,
//     pagemax: 7,
// }

// function showDay(year,month,day){
//     let todayHtml = ''
//     todayHtml += '<h3>'
//     todayHtml += year+ '/' + month + '/' + day + '(' + weeks[date.getDay()] +')';
//     todayHtml += '</h3>'
//     return todayHtml
// }

// function moveSchedule(e){
//     document.querySelector('#schedule').innerHTML = ''
    
//     if (e.target.id === 'prev') {
//         month--
//         pageCnt--

//         if (month < 1) {
//             year--
//             month = 12
//         }
//     }

//     if (e.target.id === 'next') {
//         month++
//         pageCnt++

//         if (month > 12) {
//             year++
//             month = 1
//         }
//     }

//     if(pageCnt == 1){
//         document.getElementById('prev').disabled = true;
//     }else{
//         document.getElementById('prev').disabled = false;
//     }

//     if(pageCnt == config.pagemax){
//         document.getElementById('next').disabled = true;
//     }else{
//         document.getElementById('next').disabled = false;
//     }

//     showCalendar(year, month)


// }

// function pageChange(e){
//     if(e.target.id ==='prev'){
//         pageCnt--
//     }
//     if(e.target.id === 'next'){
//         pageCnt++
//     }
// }



