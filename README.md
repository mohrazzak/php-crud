
# PHP CRUD Application

This project is a basic **CRUD (Create, Read, Update, Delete)** application built using **PHP** and **MySQL**. It demonstrates how to perform essential operations on a database, such as inserting, retrieving, updating, and deleting records.

## Features

- Create new records.
- Display records in a table.
- Update existing records.
- Delete records from the database.

## Technologies Used

- PHP
- MySQL
- HTML
- CSS
- JavaScript

## Setup Instructions

1. Clone the repository:
   ```bash
   git clone https://github.com/mohrazzak/php-crud.git
   ```

2. Navigate to the project directory:
   ```bash
   cd php-crud
   ```

3. Import the provided SQL database:
   - Open **phpMyAdmin** or your MySQL client.
   - Create a new database named `crud_app`.
   - Import the `crud_app.sql` file located in the project folder.

4. Update the database connection in `db.php`:
   ```php
   $conn = new mysqli('localhost', 'username', 'password', 'crud_app');
   ```

5. Start your local server (e.g., using **XAMPP** or **MAMP**) and open the project in the browser:
   ```
   http://localhost/php-crud
   ```

## Usage

- **Create Record**: Use the form on the homepage to add a new record.
- **Read Records**: The homepage displays a table of all records.
- **Update Record**: Click the **Edit** button to update a record.
- **Delete Record**: Click the **Delete** button to remove a record.

## Folder Structure

```plaintext
php-crud/
│
├── index.php           # Main file for displaying records and form
├── db.php              # Database connection file
├── create.php          # Handles creating new records
├── update.php          # Handles updating existing records
├── delete.php          # Handles deleting records
├── crud_app.sql        # Database file
├── style.css           # Styles for the app
└── README.md           # Project documentation
```

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

## Contributing

Feel free to fork this repository and submit pull requests for improvements or additional features.

## Contact

For any questions or feedback, you can reach me at [mohrazzak7](https://github.com/mohrazzak).
