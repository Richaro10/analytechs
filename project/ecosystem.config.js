module.exports = {
    apps: [{
      name: 'analytechs-strapi',
      cwd: '/var/www/analytechs/backend',
      script: 'npm',
      args: 'start',
      env: {
        NODE_ENV: 'production',
        DATABASE_HOST: 'localhost',
        DATABASE_PORT: 5432,
        DATABASE_NAME: 'analytechs_prod',
        DATABASE_USERNAME: 'analytechs'
      },
      watch: false,
      instances: 1,
      exec_mode: 'fork',
      max_memory_restart: '1G'
    }]
  };