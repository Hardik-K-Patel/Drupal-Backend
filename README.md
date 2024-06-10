#### Install
```sh
git checkout main
git pull origin main
cd /web
ddev import-db --file=local-db.sql.gz // import local database
ddev drush cr  // Clear the cache
ddev drush updb // run database update
ddev drush cim // Import database configurations.
```