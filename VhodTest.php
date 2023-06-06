<?php
require_once('db.php');
require_once('vhod.php');

use PHPUnit\Framework\TestCase;

class FormHandlerTest extends TestCase {
    public function testLoginFormWithValidCredentials() {
        // Создание мок-объекта для класса mysqli_result
        $resultMock = $this->getMockBuilder(mysqli_result::class)
            ->disableOriginalConstructor()
            ->getMock();
        $resultMock->expects($this->once())
            ->method('num_rows')
            ->willReturn(1);

        // Создание мок-объекта для класса mysqli
        $connMock = $this->getMockBuilder(mysqli::class)
            ->disableOriginalConstructor()
            ->getMock();
        $connMock->expects($this->once())
            ->method('query')
            ->willReturn($resultMock);

        // Установка мок-объекта для глобальной переменной $conn
        global $conn;
        $conn = $connMock;

        // Установка значений $_POST['nam'] и $_POST['pass']
        $_POST['nam'] = 'Admin';
        $_POST['pass'] = 'admin';

        // Перенаправление вывода в буфер
        ob_start();
        handleForm();
        $output = ob_get_clean();

        // Проверка ожидаемого вывода
        $expectedOutput = "Рады Вас видеть снова! Отчет по ссылке m7/otchet.html";
        $this->assertEquals($expectedOutput, $output);
    }

    public function testLoginFormWithInvalidCredentials() {
        // Создание мок-объекта для класса mysqli_result
        $resultMock = $this->getMockBuilder(mysqli_result::class)
            ->disableOriginalConstructor()
            ->getMock();
        $resultMock->expects($this->once())
            ->method('num_rows')
            ->willReturn(0);

        // Создание мок-объекта для класса mysqli
        $connMock = $this->getMockBuilder(mysqli::class)
            ->disableOriginalConstructor()
            ->getMock();
        $connMock->expects($this->once())
            ->method('query')
            ->willReturn($resultMock);

        // Установка мок-объекта для глобальной переменной $conn
        global $conn;
        $conn = $connMock;

        // Установка значений $_POST['nam'] и $_POST['pass']
        $_POST['nam'] = 'InvalidUser';
        $_POST['pass'] = 'invalidpass';

        // Перенаправление вывода в буфер
        ob_start();
        handleForm();
        $output = ob_get_clean();

        // Проверка ожидаемого вывода
        $expectedOutput = "Нет такого пользователя";
        $this->assertEquals($expectedOutput, $output);
    }
}
