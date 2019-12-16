<?php

namespace App\Repository\Comment;

use App\Interfaces\Comment\CommentRepositoryInterface;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Collection;

class CommentRepository implements CommentRepositoryInterface
{
    /**
     * Função para listar os comentários
     *
     * @return Collection
     */
    public function listComment() : Collection
    {
        return Comment::all();
    }

    /**
     * Função para listar os comentários no post
     *
     * @param integer $post
     * @return Comment
     */
    public function listCommentPost(int $post) : Comment
    {
        return Comment::where('id_post', '=', $post)->get();
    }

    /**
     * Função para pegar o comentário pelo ID
     *
     * @param Comment $comment
     * @return Comment
     */
    public function getCommentforId(Comment $comment) : Comment
    {
        return $comment;
    }

    /**
     * Função para salvar o comentário do usuário
     *
     * @param stdClass $params
     * @return Comment
     */
    public function salvaComment(stdClass $params) : Comment
    {
        $comment = new Comment([
            'comment' => $params->comment,
            'id_post' => $params->id_post,
            'id_usercomment' => $params->id_usercomment,
            'created_at' => now()
        ]);

        $comment->save();

        return $comment;
    }

    /**
     * Função para Ativar o comentário no post
     *
     * @param Comment $comment
     * @return Comment
     */
    public function activeComment(Comment $comment) : Comment
    {
        $comment->update([
            'active' => 1,
            'updated_at' => now()
        ]);

        return $comment;
    }
}
