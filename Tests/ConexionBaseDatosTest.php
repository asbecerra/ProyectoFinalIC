<?php
// use the following namespace
use PHPUnit\Framework\TestCase;

class ConexionBaseDatosTest extends TestCase
{
    /**
     * @var PDO
     */
    private $pdo;

    public function setUp()
    {
        $this->pdo = new PDO($GLOBALS['db_dsn'], $GLOBALS['db_username'], $GLOBALS['db_password']);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->pdo->query("CREATE TABLE hola (que VARCHAR(50) NOT NULL)");
    }

    public function tearDown()
    {
        $this->pdo->query("DROP TABLE hola");
    }

    public function testHolaMundo()
    {
        $holaMundo = new ConexionBaseDatos($this->pdo);

        $this->assertEquals('Hola Mundo', $holaMundo->hola());
    }

    public function testHola()
    {
        $holaMundo = new ConexionBaseDatos($this->pdo);

        $this->assertEquals('Hola Bar', $holaMundo->hola('Bar'));
    }

    public function testQue()
    {
        $holaMundo = new ConexionBaseDatos($this->pdo);

        $this->assertFalse($holaMundo->que());

        $holaMundo->hola('Bar');

        $this->assertEquals('Bar', $holaMundo->que());
    }
}

