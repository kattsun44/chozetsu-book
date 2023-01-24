<?php
interface ArticleRepositoryInterface
{
    public function fetch($id): Article;
}

interface ArticlePresenterInterface
{
    public function format(Article $article);
}

class ArticleOperation
{
    public function __construct(
        protected ArticleRepositoryInterface $repository,
        protected ArticlePresenterInterface $presenter
    ) { }

    public function show($id)
    {
        $article = $this->repository->fetch($id);
        return $this->presenter->format($article);
    }
}

