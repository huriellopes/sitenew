<?php

namespace App\Services\Comment;

use App\Interfaces\Comment\CommentRepositoryInterface;
use App\Interfaces\Comment\CommentServiceInterface;
use App\Models\Comment;
use Exception;
use Illuminate\Database\Eloquent\Collection;

class CommentService implements CommentServiceInterface
{
    /**
     * @var CommentRepositoryInterface
     */
    protected $CommentRepositoryInterface;

    /**
     * Constuct Variable
     *
     * @param CommentRepositoryInterface $CommentRepositoryInterface
     */
    public function __construct(CommentRepositoryInterface $CommentRepositoryInterface)
    {
        $this->CommentRepositoryInterface = $CommentRepositoryInterface;
    }

    /**
     * Função para listar os comentários
     *
     * @return Collection
     */
    public function listComment() : Collection
    {
        try {
            return $this->CommentRepositoryInterface->listComment();
        } catch (Exception $exception) {
            throw new Exception("Error ao listar os comentários", 400);

        }
    }

    /**
     * Função para listar os comentários no post
     *
     * @param integer $post
     * @return Comment
     */
    public function listCommentPost(int $post) : Comment;

    /**
     * Função para pegar o comentário pelo ID
     *
     * @param Comment $comment
     * @return Comment
     */
    public function getCommentforId(Comment $comment) : Comment;

    /**
     * Função para salvar o comentário do usuário
     *
     * @param stdClass $params
     * @return Comment
     */
    public function salvaComment(stdClass $params) : Comment;

    /**
     * Função para Ativar o comentário no post
     *
     * @param Comment $comment
     * @return Comment
     */
    public function activeComment(Comment $comment) : Comment;
}
