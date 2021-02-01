<?php
namespace App\Models;

// On importe le "CoreModel" de Lumen
// Ce fichier ne sera jamais éditié, il fait parti du noyau de lumen
use Illuminate\Database\Eloquent\Model;
use App\Models\Title;


// Character est un model qui étend Illuminate\Database\Eloquent\Model
// De ce fait Character bénéficie de toutes les fonctionnalités proposées par la classe parente
class Character extends Model
{
    protected $table = 'character';

    public function title()
    {
        // DOC : https://laravel.com/docs/6.x/eloquent-relationships#one-to-many
        // déclaration qu'un character à n maisons
        return $this->belongsTo(
            Title::class,
            'id_title',  // argument qui correspond au champs character.id_title
            'id'  //    argument qui correspond au champ title.id
        );
    }

    public function house(){

        return $this->belongsToMany(
            House::class,
            'house_has_characters',
            'character',
            'house'
        );

    }
}
