## pullからpull requestまでの流れ
### ローカル
1. (masterにいる状態で)リモートをpull
2. 作業ブランチがない場合はブランチを作成して、そのブランチに移動  
  作業ブランチがある場合はそのブランチに移動して、ローカルのmasterをmerge
3. 作業ブランチで編集(エディタを使ってコードを書く) (以下 5番まで作業ブランチ)
4. 変更したものをadd(ステージング)する
5. addしたものをcommit
6. ここでmasterに移動し、リモートをpull
7. 作業ブランチに移動し、ローカルのmasterをmerge
8. 衝突(コンフリクト)がない場合、リモートにpush
### GitHub
9. GitHubを開き自分の作業ブランチと同じ場所に移動
10. 作業ブランチからリモートのmasterにpull request

## コマンドプロンプト(ターミナル)で上記の流れを追う
> 上記の番号とは一致していない。
1. cd {subomyのフォルダまでのパス}
2. git branch
3. git pull
4. git branch {新しい作業プランチ}      // 以下作業ブランチ
5. git checkout {作業ブランチ}
6. 編集
7. git add .
8. git commit -m "{コメント}"
9. git checkout master
10. git pull
11. git checkout {作業ブランチ}
12. git merge master
13. git push origin {作業ブランチ}
14. GitHubに移動し、以下上記と同様
