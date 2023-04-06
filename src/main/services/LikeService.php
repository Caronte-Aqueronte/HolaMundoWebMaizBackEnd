<?php



class LikeService
{
    
    private  LikeRepository $likeRepository;
    function __construct()
    {
        $this->likeRepository = new LikeRepository();
    }

    public function nuevoLike()
    {
        return $this->likeRepository->nuevoLike();
    }

    public function mostarLikes()
    {
        return $this->likeRepository->mostarLikes();
    }
}
?>