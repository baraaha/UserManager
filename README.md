# Laravel User Manager Package

The Laravel User Manager Package is a simple and easy-to-use package that provides functionality to fetch users from the database in a Laravel application. It is designed to streamline the process of retrieving user data, making it a valuable addition to any Laravel project.

## Installation

You can install the Laravel User Manager Package via Composer. Simply run the following command in your Laravel application's root directory:

```bash
composer require com.panda180.laravel/user-manager
```

## Usage

Once the package is installed, you can use the `UserManager` class to fetch users from the database. Here's a basic example of how to use the package:

```php
use UserManager\UserManager;

// Fetch all users
$userManager = new UserManager();
$users = $userManager->getUsers();
dd($users);
```

## Features

- Fetch all users from the database with a simple method call.
- Provides an intuitive interface to access user data.

## Requirements

- PHP version 7.4 or higher
- Laravel version 8.x or higher
- Illuminate/Support package version 8.0 or higher

## Contributing

Contributions to the Laravel User Manager Package are welcome! If you find any issues or have ideas for improvements, please open an issue or submit a pull request on GitHub.

## License

The Laravel User Manager Package is open-source software licensed under the [MIT License](https://opensource.org/licenses/MIT).

## Credits

The Laravel User Manager Package is developed and maintained by [Your Name or Organization](https://github.com/panda180).

## Contact

## If you have any questions or need support, you can reach out to us at [ahmed7med23@gmail.com](mailto:ahmed7med23@gmail.com).
