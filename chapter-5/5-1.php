<?php

// BAD: このクラスには異なる変更理由が混在している
class ArticleOparation
{
    private Article $article;

    public function draft(Writer $writer) : void { }
    public function subscribe(Subscriber $subscribe) : void { }
}

