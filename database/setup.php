<?php
// database/setup.php

$dbFile = __DIR__ . '/../database/leads.sqlite';

try {
    $pdo = new PDO("sqlite:" . $dbFile);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Array com as novas colunas e seus tipos
    $newColumns = [
        'cep' => 'TEXT'
    ];

    // Verifica se cada coluna já existe e, se não, adiciona a coluna
    foreach ($newColumns as $column => $type) {
        $result = $pdo->query("PRAGMA table_info(leads)")->fetchAll(PDO::FETCH_ASSOC);
        $columns = array_column($result, 'name');

        if (!in_array($column, $columns)) {
            $pdo->exec("ALTER TABLE leads ADD COLUMN $column $type");
            echo "Coluna '$column' adicionada com sucesso.\n";
        } else {
            echo "A coluna '$column' já existe.\n";
        }
    }

    echo "Atualização da tabela 'leads' concluída!";
} catch (PDOException $e) {
    die("Erro ao atualizar a tabela 'leads': " . $e->getMessage());
}

// try {
//     $pdo = new PDO("sqlite:" . $dbFile);
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//     $createTableQuery = "
//     CREATE TABLE IF NOT EXISTS leads (
//         id INTEGER PRIMARY KEY AUTOINCREMENT,
//         name TEXT NOT NULL,
//         email TEXT NOT NULL UNIQUE,
//         phone TEXT,
//         created_at DATETIME DEFAULT CURRENT_TIMESTAMP
//     )";

//     $pdo->exec($createTableQuery);
//     echo "Tabela 'leads' criada com sucesso!";
// } catch (PDOException $e) {
//     die("Erro ao conectar com o banco de dados: " . $e->getMessage());
// }

// require_once __DIR__ . '/../app/config.php';

// $createTableQuery = "
// CREATE TABLE IF NOT EXISTS cadastrado_asaas (
//     id INTEGER PRIMARY KEY AUTOINCREMENT,
//     customer_id TEXT,
//     name TEXT NOT NULL,
//     email TEXT NOT NULL,
//     phone TEXT,
//     cpf TEXT,
//     address TEXT,
//     company_name TEXT,
//     cnpj TEXT,
//     plan_name TEXT,
//     plan_value REAL,
//     payment_cycle TEXT,
//     subscription_id TEXT,
//     created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
//     updated_at DATETIME DEFAULT CURRENT_TIMESTAMP
// )";

// $pdo->exec($createTableQuery);
// echo "Tabela criada com sucesso!"; -->
