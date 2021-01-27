<?php

/**
 * DIP = Dependency Inversion Principle.
 * 
 * This principle says that we must depend
 * on abstractions and not implementations.
 * 
 * The First example shows the wrong way to create classes and
 * in the Second example shows how to do it with __Dependency Injection__
 * (good, but not perfect),
 * and in the Third example it shows how to do with __DIP__.
*/

# First Example
use MySQLConnectionEX;

class PasswordReminderEX
{
    private $dbConnectionEX;

    // the MySQLConnectionEX class does not exist, so there will be errors.
    public function __construct() {
        $this -> dbConnectionEX = new MySQLConnectionEX();
    }
}

# Second Example
use MySqlConnectionEX1;

class PasswordReminderEX1
{
    private $dbConnectionEX1;

    // Same as MySQLConnectionEX Above.
    public function __construct(MySqlConnectionEX1 $dbConnectionEX1) {
        $this -> dbConnectionEX1 = $dbConnectionEX1;
    }
}

# Third Example (Most efficient)
interface DBConnectionInterface
{
    public function connect();
}

class MySqlConnection implements DBConnectionInterface
{
    public function connect() {/*...*/}
}

class OracleConnection implements DBConnectionInterface
{
    public function connect() {/*...*/}
}

class SQLServer implements DBConnectionInterface
{
    public function connect() {/*...*/}
}

class PasswordReminder
{
    private $dbConnection;

    public function __construct(DBConnectionInterface $dbConnection) {
        $this -> dbConnection = $dbConnection;
    }
}