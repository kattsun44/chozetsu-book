# chozetsu-book
[ちょうぜつソフトウェア設計入門 ――PHPで理解するオブジェクト指向の活用 ](https://gihyo.jp/book/2022/978-4-297-13234-7) の学習用リポジトリ

## 環境構築
初回実行
```shell
% docker image build --tag chozetsu-book:app --file Dockerfile .
```

上記コマンド実行後、`make up` で docker が起動し、php ファイルが実行できる。

```shell
% make up
docker container run \
                --name app \
                --rm \
                --interactive \
                --tty \
                --volume /Users/kattsun/ghq/github.com/kattsun44/chozetsu-book:/src \
                chozetsu-book:app \
                bash
root@ebd40c7296ce:/# php src/chapter-3/3-4.php
ワン
にゃん
root@ebd40c7296ce:/# php src/chapter-3/3-11.php
ワン
にゃん
ワン
ニャン
```
