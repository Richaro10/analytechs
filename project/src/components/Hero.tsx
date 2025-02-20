import React from 'react';
import { ArrowRight, BarChart2, Database, TrendingUp } from 'lucide-react';
import { Link } from 'react-router-dom';
import { useContent } from '../hooks/useContent';
import type { Hero as HeroContent } from '../types/content';

const Hero = () => {
  const { data: content, loading } = useContent<HeroContent>('hero');

  if (loading) {
    return (
      <div className="relative bg-gradient-to-r from-[#1E3A8A] to-[#3B82F6] pt-24 min-h-[600px] animate-pulse">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 relative">
          <div className="h-8 bg-white/20 rounded w-2/3 mb-4"></div>
          <div className="h-4 bg-white/20 rounded w-1/2"></div>
        </div>
      </div>
    );
  }

  return (
    <div className="relative bg-gradient-to-r from-[#1E3A8A] to-[#3B82F6] pt-24">
      <div className="absolute inset-0 overflow-hidden">
        <div className="absolute -inset-[10px] bg-[linear-gradient(45deg,transparent_25%,rgba(68,107,158,0.2)_50%,transparent_75%,transparent_100%)] bg-[length:60px_60px] animate-[gradient_3s_linear_infinite]"></div>
      </div>

      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 relative">
        <div className="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
          <div className="text-white">
            <h1 className="text-4xl md:text-5xl font-bold mb-6 leading-tight">
              {content?.title || 'Transformez vos données en décisions stratégiques'}
            </h1>
            <p className="text-xl mb-8 text-gray-100 leading-relaxed">
              {content?.subtitle || 'Analytechs vous accompagne dans votre transformation digitale avec des solutions sur mesure en Business Intelligence, Data Analytics et Conseil en Management.'}
            </p>
            <div className="flex flex-col sm:flex-row gap-4">
              <Link 
                to={content?.ctaLink || "/contact"}
                className="group bg-accent text-white px-8 py-3 rounded-md font-medium hover:bg-[#D97706] transition-all duration-300 flex items-center justify-center shadow-lg hover:shadow-accent/20"
              >
                {content?.ctaText || "Commencer maintenant"}
                <ArrowRight className="ml-2 h-5 w-5 group-hover:translate-x-1 transition-transform" />
              </Link>
              <Link 
                to="/services" 
                className="border-2 border-white/80 text-white px-8 py-3 rounded-md font-medium hover:bg-white hover:text-primary transition-all duration-300 text-center backdrop-blur-sm hover:shadow-lg flex items-center justify-center"
              >
                En savoir plus
              </Link>
            </div>
          </div>
          <div className="grid grid-cols-2 gap-6 transform lg:translate-y-8">
            <div className="bg-white/10 backdrop-blur-lg p-6 rounded-lg hover:bg-white/15 transition-colors group">
              <BarChart2 className="h-10 w-10 text-accent mb-4 group-hover:scale-110 transition-transform" />
              <h3 className="text-white text-lg font-semibold mb-2">Business Intelligence</h3>
              <p className="text-gray-100">Visualisez vos données pour une prise de décision éclairée</p>
            </div>
            <div className="bg-white/10 backdrop-blur-lg p-6 rounded-lg hover:bg-white/15 transition-colors group transform translate-y-4">
              <Database className="h-10 w-10 text-accent mb-4 group-hover:scale-110 transition-transform" />
              <h3 className="text-white text-lg font-semibold mb-2">Data Analytics</h3>
              <p className="text-gray-100">Exploitez la puissance de vos données</p>
            </div>
            <div className="bg-white/10 backdrop-blur-lg p-6 rounded-lg col-span-2 hover:bg-white/15 transition-colors group transform translate-y-2">
              <TrendingUp className="h-10 w-10 text-accent mb-4 group-hover:scale-110 transition-transform" />
              <h3 className="text-white text-lg font-semibold mb-2">Conseil en Management</h3>
              <p className="text-gray-100">Optimisez votre stratégie d'entreprise</p>
            </div>
          </div>
        </div>
      </div>
      <div className="absolute bottom-0 left-0 right-0 h-20 bg-gradient-to-b from-transparent to-white"></div>
    </div>
  );
};

export default Hero;