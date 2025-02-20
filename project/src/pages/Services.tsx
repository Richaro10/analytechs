import React from 'react';
import { BarChart2, Database, TrendingUp, Code2, LineChart, Users } from 'lucide-react';
import { useLocation } from 'react-router-dom';

const Services = () => {
  const location = useLocation();

  const services = [
    {
      icon: <BarChart2 className="h-12 w-12 text-accent" />,
      title: "Business Intelligence",
      description: "Transformez vos données en insights actionnables avec nos solutions BI sur mesure.",
      features: [
        "Tableaux de bord interactifs",
        "Reporting automatisé",
        "KPIs personnalisés",
        "Intégration multi-sources"
      ]
    },
    {
      icon: <Database className="h-12 w-12 text-accent" />,
      title: "Data Analytics",
      description: "Exploitez la puissance de vos données avec des analyses avancées.",
      features: [
        "Analyse prédictive",
        "Machine Learning",
        "Big Data",
        "Data Mining"
      ]
    },
    {
      icon: <Code2 className="h-12 w-12 text-accent" />,
      title: "Développement d'Applications",
      description: "Des solutions logicielles sur mesure pour répondre à vos besoins spécifiques.",
      features: [
        "Applications web",
        "Applications mobiles",
        "APIs",
        "Intégrations"
      ]
    },
    {
      icon: <TrendingUp className="h-12 w-12 text-accent" />,
      title: "Conseil en Management",
      description: "Optimisez votre stratégie d'entreprise avec nos conseils experts.",
      features: [
        "Stratégie digitale",
        "Optimisation des processus",
        "Gestion du changement",
        "Formation"
      ]
    },
    {
      icon: <LineChart className="h-12 w-12 text-accent" />,
      title: "Contrôle de Gestion",
      description: "Pilotez votre performance financière et opérationnelle.",
      features: [
        "Tableaux de bord financiers",
        "Analyse des coûts",
        "Budgétisation",
        "Prévisions"
      ]
    },
    {
      icon: <Users className="h-12 w-12 text-accent" />,
      title: "Webmarketing",
      description: "Développez votre présence en ligne et attirez plus de clients.",
      features: [
        "SEO",
        "Marketing digital",
        "Analyse de données",
        "Stratégie de contenu"
      ]
    }
  ];

  return (
    <div className="min-h-screen bg-white">
      {/* Bannière */}
      <div className="relative bg-gradient-to-r from-[#1E3A8A] to-[#3B82F6] pt-24">
        <div className="absolute inset-0 overflow-hidden">
          <div className="absolute -inset-[10px] bg-[linear-gradient(45deg,transparent_25%,rgba(68,107,158,0.2)_50%,transparent_75%,transparent_100%)] bg-[length:60px_60px] animate-[gradient_3s_linear_infinite]"></div>
        </div>
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 relative">
          <div className="max-w-3xl">
            <h1 className="text-4xl font-bold text-white mb-4">Nos Services</h1>
            <p className="text-xl text-gray-100">
              Des solutions complètes pour votre transformation digitale
            </p>
          </div>
        </div>
        <div className="absolute bottom-0 left-0 right-0 h-16 bg-gradient-to-b from-transparent to-white"></div>
      </div>

      {/* Contenu */}
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
          {services.map((service, index) => (
            <div key={index} className="bg-white rounded-lg shadow-lg p-8 hover:shadow-xl transition-shadow">
              <div className="mb-6">{service.icon}</div>
              <h3 className="text-2xl font-semibold text-neutral mb-4">{service.title}</h3>
              <p className="text-gray-600 mb-6">{service.description}</p>
              <ul className="space-y-3">
                {service.features.map((feature, idx) => (
                  <li key={idx} className="flex items-center text-gray-600">
                    <span className="h-1.5 w-1.5 rounded-full bg-accent mr-2"></span>
                    {feature}
                  </li>
                ))}
              </ul>
            </div>
          ))}
        </div>
      </div>
    </div>
  );
};

export default Services;