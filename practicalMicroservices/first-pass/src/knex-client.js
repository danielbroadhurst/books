const Bluebird = require("bluebird");
const knex = require("knex");

function createKnexClient({ connectionString, migrationsTableName }) {
  const client = knex(connectionString);

  const migrationsOptions = {
    tableName: migrationsTableName || "knex_migrations",
  };

  return Bluebird.resolve(client.migrate.latest(migrationsOptions)).then(
    () => client
  );
}

module.exports = createKnexClient;
