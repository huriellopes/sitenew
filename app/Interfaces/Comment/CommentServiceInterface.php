<?php

namespace App\Interfaces\Comment;

interface CommentServiceInterface
{
    /**
     * Função para listar os comentários
     *
     * @return Collection
     */
    public function listComment() : Collection;

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
