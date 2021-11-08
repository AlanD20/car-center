# Car Center

A simple single page website runs on Laravel framework.

## **[Project Live Preview](https://car-center.aland20.tech/)**

---

## Deployment

- **The project configured for CPANEL installation, you do not have to worry about changing file paths. Also, you can serve it through Artisan command.**

### Deploying through SSH access:

You can follow this guide to learn more about how to deploy Laravel project through SSH access.
<br />
[Click here for the guide](https://devmarketer.io/learn/deploy-laravel-5-app-lemp-stack-ubuntu-nginx/)

### Deploying on CPANEL:

1. Install and update required dependencies on your local machine.
   <br /> `composer install --no-dev -o`
   <br /> `composer update --no-dev -o`
   <br /> `npm install && npm run prod`
2. Run dump-autoload on composer .
   <br /> `composer dump-autoload -o`
3. Cache the application.
   <br /> `composer run deploy`
4. Edit .env file with required data on your local machine.
5. Compress the project then upload it to CPANEL.
6. Change permissions for the following folders.
   <br /> `Laravel/storage -> 775`
   <br /> `Laravel/bootstrap/cache -> 775`
7. Visit the following path on your website to clear out the application cache. **(You can change header authorization key in .env file)**
   <br /> `https://website.com/config/cache`
8. In config, you can migrate and config your application.
   `https://website.com/config`
9. The site should work with no problem!

## Contribution

Feel free to contribute to the project. Make sure to credit me :)

## License

[GNU GENERAL PUBLIC LICENSE](LICENSE)
