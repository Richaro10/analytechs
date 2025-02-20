import axios from 'axios';

const strapiClient = axios.create({
  baseURL: import.meta.env.VITE_STRAPI_URL || 'http://localhost:1337/api',
  headers: {
    'Content-Type': 'application/json',
    Authorization: `Bearer ${import.meta.env.VITE_STRAPI_TOKEN}`,
  },
});

export default strapiClient;