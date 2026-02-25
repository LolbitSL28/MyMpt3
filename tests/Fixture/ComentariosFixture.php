<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ComentariosFixture
 */
class ComentariosFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'Id_Comentario' => 1,
                'Id_Usuario' => 1,
                'Contenido' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
