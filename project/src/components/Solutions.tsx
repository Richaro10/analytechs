import React from 'react';
import { BarChart2, Database, BrainCircuit, Users2, Globe, MessageCircle } from 'lucide-react';
import { useContent } from '../hooks/useContent';
import type { Service } from '../types/content';

const iconMap: Record<string, React.ReactNode> = {
  'BarChart2': <BarChart2 className="h-12 w-12" />,
  'Database': <Database className="h-12 w-12" />,
  'BrainCircuit': <BrainCircuit className="h-12 w-12" />,
  'Users2': <Users2 className="h-12 w-12" />,
  'Globe': <Globe className="h-12 w-12" />,
  'MessageCircle': <MessageCircle className="h-12 w-12" />
};

const Solutions = () => {
  const { data: services, loading } = useContent<Service[]>('services');

  const defaultServices = [
    {
      icon: 'BarChart2',
      title: "Business Intelligence",
      description: "Transformez vos données en insights actionnables avec nos solutions BI sur mesure."
    },
    {
      icon: 'Database',
      title: "Data Engineering",
      description: "Construisez des pipelines de données robustes et évolutifs pour alimenter vos analyses."
    },
    {
      icon: 'BrainCircuit',
      title: "Intelligence Artificielle",
      description: "Exploitez la puissance du Machine Learning pour prédire les tendances et optimiser vos processus."
    },
    {
      icon: 'Users2',
      title: "Formation & Accompagnement",
      description: "Montez en compétence avec nos programmes de formation personnalisés."
    },
    {
      icon: 'Globe',
      title: "Webmarketing",
      description: "Optimisez votre présence en ligne avec des stratégies data-driven et des campagnes performantes."
    },
    {
      icon: 'MessageCircle',
      title: "Marketing Digital",
      description: "Développez votre visibilité avec du SEO, content marketing et des analyses de performance avancées."
    }
  ];

  const displayServices = services || defaultServices;

  if (loading) {
    return (
      <section className="py-20 bg-gradient-to-b from-white to-gray-50">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="text-center mb-16 animate-pulse">
            <div className="h-8 bg-gray-200 rounded w-1/3 mx-auto mb-4"></div>
            <div className="h-4 bg-gray-200 rounded w-1/2 mx-auto"></div>
          </div>
          <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            {[1, 2, 3, 4, 5, 6].map((i) => (
              <div key={i} className="bg-white p-8 rounded-xl shadow-lg animate-pulse">
                <div className="h-12 w-12 bg-gray-200 rounded-full mb-6"></div>
                <div className="h-6 bg-gray-200 rounded w-2/3 mb-4"></div>
                <div className="h-4 bg-gray-200 rounded w-full mb-2"></div>
                <div className="h-4 bg-gray-200 rounded w-5/6"></div>
              </div>
            ))}
          </div>
        </div>
      </section>
    );
  }

  return (
    <section className="py-20 bg-gradient-to-b from-white to-gray-50">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="text-center mb-16">
          <h2 className="text-3xl md:text-4xl font-bold text-primary mb-4">
            Nos Solutions
          </h2>
          <p className="text-xl text-gray-600">
            Des solutions innovantes pour votre transformation digitale
          </p>
        </div>
        
        <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
          {displayServices.map((solution, index) => (
            <div 
              key={index}
              className="group relative bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-1 border border-gray-100"
            >
              <div className="absolute inset-0 bg-gradient-to-r from-[#1E3A8A]/5 to-[#3B82F6]/5 opacity-0 group-hover:opacity-100 rounded-xl transition-opacity duration-300"></div>
              <div className="relative">
                <div className="text-[#D97706] group-hover:text-[#1E3A8A] transition-colors duration-300">
                  <div className="bg-[#1E3A8A]/5 p-3 rounded-lg inline-block transform transition-transform duration-300 group-hover:scale-110">
                    {iconMap[solution.icon]}
                  </div>
                </div>
                <h3 className="text-xl font-semibold mt-6 mb-4 text-[#1E3A8A]">
                  {solution.title}
                </h3>
                <p className="text-gray-600">
                  {solution.description}
                </p>
              </div>
            </div>
          ))}
        </div>
      </div>
    </section>
  );
};

export default Solutions;