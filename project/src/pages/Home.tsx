import React from 'react';
import Hero from '../components/Hero';
import Solutions from '../components/Solutions';
import Clients from '../components/Clients';

const Home = () => {
  return (
    <div className="overflow-hidden">
      <Hero />
      <Solutions />
      <Clients />
    </div>
  );
};

export default Home;