<?php
/**
 * Description of AwsArticle
 *
 * @author Ray
 */
use \Eloquent;
class AwsArticle extends Eloquent{
    //put your code here
    protected $table = "aws_article";
    
    public function comments()
    {
         return $this->hasMany("AwsArticleComments");
    }
}
