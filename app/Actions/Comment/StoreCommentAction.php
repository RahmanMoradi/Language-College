<?php

namespace App\Actions\Comment;

use App\Models\Comment;
use App\Repositories\Comment\CommentRepositoryInterface;
use Illuminate\Support\Facades\DB;
use Lorisleiva\Actions\Concerns\AsAction;

class StoreCommentAction
{
    use AsAction;

    public function __construct(private readonly CommentRepositoryInterface $repository)
    {
    }

    public function handle($model, array $payload): Comment
    {
        return DB::transaction(function () use ($model, $payload) {
            return $model->comments()->create([
                'user_id' => auth()->id(),
                'title'   => $payload['title'],
                'body'    => $payload['body'],
            ]);
        });
    }
}
