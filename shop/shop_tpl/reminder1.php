<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>ログインID・パスワードの確認</title>
        <link rel="stylesheet" href="../shop_css/reminder.css">
    </head>
    <body>
        <div id="wrapper">
            <div id="header">
                <div class="center">
                </div>
            </div>
            <div id="content">
                <div class="center">
                    <div id="c_left">
                        <h2>ログインID・パスワードの確認</h2>
                        <div id="nav">
                            <ul id="navi">
                                <li>店舗番号・通知用メールアドレスの入力</li><span class="san"></span>
                                <li class="color">店舗番号・通知用メールアドレスの確認</li>
                                <li>ログインID・仮パスワードの送信</li>
                            </ul>
                        </div>
                        <div id="left_con">
                            <p>
                                ご登録されている店舗の店舗番号、通知用メールアドレスを入力してください。仮パスワードを発行し、メールにてログインＩＤ・仮パスワードをお知らせいたします。店舗番号は「ぐるんて」から届くアクセス報告書に記載されています。<br>
                                尚、１日のご利用回数は３回までとなっております。<br>
                                店舗番号は7桁の英数字の組み合わせとなります。
                            </p>
                            <form action="../func/reminder1.php" method="POST">
                                <table>
                                    <tr>
                                        <th>店舗番号</th>
                                        <td><span class="mar"><?=$login_id?></span></td>
                                    </tr>
                                    <tr>
                                        <th>通知用メールアドレス</th>
                                        <td><span class="mar"><?=$mail?></span></td>
                                    </tr>
                                </table>
                                <div id="veri">
                                    <div id="bun">
                                        <h3>今一度ご確認ください。</h3>
                                        <p>大文字と小文字を間違って入力していませんか？</p>
                                        <p>余計な文字やスペースが入力されていませんか？</p>    
                                    </div>
                                </div>
                                <div id="btn">
                                    <input type="submit" name="back" value="戻る">
                                    <input type="submit" name="regist" value="送信">
                                </div>
                            </form>    
                        </div>
                    </div>
                    <div id="c_right">
                        <h2>仮パスワード発行までの流れ</h3>
                        <div id="R_content">
                            <div id="step1">
                                <p>
                                    通知用メールアドレスは<br>
                                    <span>
                                        <ul>
                                            <li>・ご登録済みですか？</li>
                                            <li>・ご利用可能ですか？</li>
                                        </ul>
                                    </span>
                                </p>
                            </div>
                            <div id="y_n">
                                <div id="yes">
                                    <div class="yes">
                                        <p>YES</p>
                                    </div>
                                    <div id="step2">
                                        <p>「ログインID・パスワードの確認」で店舗番号、通知用メールアドレスを入力・送信し、メールにてお取り寄せください。</p>
                                    </div>
                                    <div class="yes">
                                        <p>YES</p>
                                    </div>
                                    <div id="step3">
                                        <p>メールに記載されているID・仮パスワードでログイン</p>
                                    </div>
                                </div>
                                <div id="no">
                                    <p>NO</p>
                                    <p class="sita"></p>
                                </div>
                            </div>
                            <div id="support">
                                <p>
                                    ご登録されている通知用メールアドレスを忘れてしまった場合やご利用できなくなっている場合は、サポートセンター までお問い合わせください。
                                </p>
                                <p>
                                    サポートセンター<br>
                                    TEL：0120-22-9672<br>
                                    受付時間：10：00〜18：00（平日）
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="footer">
                <div class="center"></div>
            </div>
        </div>
    </body>
</html>