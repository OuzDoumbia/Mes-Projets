<?php

namespace App\Http\Controllers;
use App\Models\Candidat;
use App\Models\Like;
use App\Models\User;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    

    public function LikeProgramme(Request $request, Candidat $candidat, $type)
    { 

        // Check if the user has already liked or disliked the program
        $existingLike = Like::where('candidat_id', $candidat->id)
                            ->where('user_id', auth()->id())
                            ->first();

        // If the user has already liked or disliked the program, delete the existing like
        if ($existingLike) {
            $existingLike->delete();
        }

        // Create a new like or dislike based on the request type
        if ($type === 'like' || $type === 'dislike') {
            $like = new Like([
                'candidat_id' => $candidat->id,
                'user_id' => auth()->id(),
                'type' => $type,
            ]);
            

            $like->save();
        }
            // Get the count of likes and dislikes for the candidat
            $likesCount = Like::where('candidat_id', $candidat->id)
            ->where('type', 'like')
            ->count();

            $dislikesCount = Like::where('candidat_id', $candidat->id)
                ->where('type', 'dislike')
                ->count();

            // Return the counts as JSON
            return response()->json([
            'likes' => $likesCount,
            'dislikes' => $dislikesCount,
            ]);
        // Redirect back to the program view
        return redirect()->route('programme-candidat');
    }
}
