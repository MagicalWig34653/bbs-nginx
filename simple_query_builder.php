<?php
const DB_HOST = '100.78.120.75';
const DB_USER = 'bbs_nginx';
const DB_PASS = 's1@]1CXmkTLt57zY';
const DB_NAME = 'db_bbs';

$pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8mb4', DB_USER, DB_PASS);


class User
{

    private string $DB_HOST = '10.61.1.42';
    private string $DB_USER = 'bbs_nginx';
    private string $DB_PASS = 's1@]1CXmkTLt57zY';
    private string $DB_NAME = 'bbs_db';
    private PDO $pdo;
    private string $statement;
    private string $table = 'test_user';

    protected string $new_uuid;
    public string $new_username;
    public string $new_email;
    public string $new_wohnort;

    public function __construct()
    {
        $this->pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8mb4', DB_USER, DB_PASS);
    }

    public static function generateUUIDv4(): string
    {
        $data = random_bytes(16);
        $data[6] = chr(ord($data[6]) & 0x0f | 0x40);
        $data[8] = chr(ord($data[8]) & 0x3f | 0x80);

        return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
    }

    public function save(): void
    {
        $this->new_uuid = self::generateUUIDv4();
        $this->statement = "INSERT INTO {$this->table} (uuid, username, email, wohnort) VALUES (:uuid, :username, :email, :wohnort)";
        $this->pdo->prepare($this->statement)->execute([
            'uuid' => $this->new_uuid,
            'username' => $this->new_username,
            'email' => $this->new_email,
            'wohnort' => $this->new_wohnort
        ]);
        $this->new_uuid = null;
        $this->new_username = null;
        $this->new_email = null;
        $this->new_wohnort = null;
        $this->statement = null;
    }

    public function get_all(): array
    {
        $this->statement = "SELECT * FROM {$this->table}";
        $exe = $this->pdo->prepare($this->statement);
        $exe->execute();
        unset($this->statement);
        return $exe->fetchAll(PDO::FETCH_ASSOC);
    }
}