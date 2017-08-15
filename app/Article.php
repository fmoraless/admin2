<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model {
    /* RELACION */

    public function categoriaId() {
        return $this->belongsTo(Categoria::class);
    }

}
