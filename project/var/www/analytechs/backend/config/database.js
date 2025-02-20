module.exports = ({ env }) => ({
  connection: {
    client: 'postgres',
    connection: {
      host: env('DATABASE_HOST', 'localhost'),
      port: env.int('DATABASE_PORT', 5432),
      database: env('DATABASE_NAME', 'analytechs_prod'),
      user: env('DATABASE_USERNAME', 'analytechs'),
      password: env('DATABASE_PASSWORD', 'votre_mot_de_passe_securise'),
      ssl: env.bool('DATABASE_SSL', false),
    },
  },
});