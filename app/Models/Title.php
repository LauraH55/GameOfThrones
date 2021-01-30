<?php
namespace App\Models;

// On importe le "CoreModel" de Lumen
// Ce fichier ne sera jamais éditié, il fait parti du noyau de lumen
use Illuminate\Database\Eloquent\Model;


// Character est un model qui étend Illuminate\Database\Eloquent\Model
// De ce fait Character bénéficie de toutes les fonctionnalités proposées par la classe parente
class Title extends Model {

    protected $table = 'title';

    public function title()
    {
        // DOC : https://laravel.com/docs/6.x/eloquent-relationships#one-to-many
        // déclaration qu'un titre à n personnages
        return $this->hasOne(
            Title::class,
        );

    }
}
