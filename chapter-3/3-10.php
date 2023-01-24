<?php
class ArticleRepository implements ArticleRepositoryInterface
{
    public function fetch($id): Article
    {
        // TODO: データベースに問い合わせする (SQL)
    }
}

class ArticlePresenter implements ArticlePresenterInterface
{
    public function format(Article $article)
    {
        // TODO: 表示用に整形する (HTML)
    }
}

