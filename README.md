## Project Resources

-   [OpenSGF](https://www.opensgf.org/): Join our weekly meetings!
-   [Code of Conduct](https://www.opensgf.org/code-of-conduct): Please read before participating
-   **Discord**: Click "Join" on [OpenSGF](https://www.opensgf.org/) website
-   [Project Documentation](https://docs.opensgf.org/collection/good-dads-0SqBtE9EkS): Product Requirement Documents (PRDs)
-   [Project Management](https://plane.sgf.dev/open-sgf/projects/b87b7a4a-10b8-40ee-808d-2ac930c0f46f/issues/): Claim a PRD and/or update PRD status here

## Project Setup

-   [Install PHP](https://www.php.net/manual/en/install.php)
-   [Install Composer](https://getcomposer.org/doc/00-intro.md)
-   Install Docker
    -   For Mac: [Docker Desktop](https://docs.docker.com/desktop/install/mac-install/) | [Orbstack](https://docs.orbstack.dev/quick-start#installation)
    -   For Windows: [Docker Desktop](https://docs.docker.com/desktop/install/windows-install/)
    -   For Linux: [Docker Desktop](https://docs.docker.com/desktop/install/linux-install/)
-   Navigate to the project directory and run `composer install`
-   Duplicate the .env.example: `cp .env.example .env`
-   For running sail commands, by default, you are required to enter the full path to the executable in `vendor/bin/sail`. Most devs prefer to create an alias in their shell so they only have to type `sail`. Read the sail docs about [configuring a sail alias](https://laravel.com/docs/11.x/sail#configuring-a-shell-alias). Further documentation will assume an alias exists in your shell.

## Installing Current Project Dependencies

-   All project contributors should run these commands every week to ensure your local project is using the current project dependencies.
    -   `composer install`
    -   `npm install`
    -   `npm run build`

## Updating the Project Dependencies

-   The project maintainer should run these commands every week to ensure the project is using the latest dependencies, then merge `composer.lock` and `package-lock.json` along with any files that needed to be fixed.
    -   `composer update`
    -   `npm update`
    -   `npm run build`
    -   `composer lint`
    -   `composer analyse`

## Starting the Project

-   Start the project: `sail up -d`
-   Run DB migration scripts only on initial setup and after creating new migrations `sail artisan migrate --seed`
-   View the project in your browser at http://localhost:80
    -   The URL port number is configured in the `.env` file as APP_PORT

## Project Linting

-   Navigate to the project directory and run `composer lint`

## Project Static Analysis

-   Navigate to the project directory and run `composer analyse`

## Viewing and Generating Database Diagrams

The file [`./database/schema.dbml`](./database/schema.dbml) can be opened with a tool such as [dbdiagram.io](https://dbdiagram.io/).
There are also e VS Code extensions such as [DBML Live Preview](https://marketplace.visualstudio.com/items?itemName=nicolas-liger.dbml-viewer) that can view these.

To regenerate the file use the artisan command `sail artisan dbml:generate`

## Shutting Down the Project

-   To stop the containers run `sail down`

## Resetting the Database

-   To purge your MySQL database, run `sail down -v`, then `sail up -d`, then `sail artisan migrate:fresh --seed`. (⚠️ WARNING: This will purge EVERYTHING from your database! ⚠️)

## Frontend Development

-   Use [shadcn components](https://ui.shadcn.com/) within `resources/js/Components/ui` when building pages
-   Any new custom reusable components should be accompanied by a storybook story in the `stories` directory
