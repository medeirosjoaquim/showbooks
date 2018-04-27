  <?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('books', function (Blueprint $table) {
      $table->increments('id');
      $table->string('title');
      $table->string('author');
      $table->string('publisher');
      $table->integer('year');
      $table->integer('price');
      $table->text('review');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('books');
  }
}
