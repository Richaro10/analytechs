import React from 'react';
import { Lightbulb, Target, Users, Shield, Rocket, Award } from 'lucide-react';
import { useLocation } from 'react-router-dom';
import { useContent } from '../hooks/useContent';
import type { AboutSection } from '../types/content';

const iconMap: Record<string, React.ReactNode> = {
  'Lightbulb': <Lightbulb className="h-8 w-8 text-accent" />,
  'Target': <Target className="h-8 w-8 text-accent" />,
  'Users': <Users className="h-8 w-8 text-accent" />,
  'Shield': <Shield className="h-8 w-8 text-accent" />,
  'Rocket': <Rocket className="h-8 w-8 text-accent" />,
  'Award': <Award className="h-8 w-8 text-accent" />
};

const About = () => {
  const location = useLocation();
  const { data: content, loading } = useContent<AboutSection>('about');

  const defaultValues = [
    {
      icon: 'Lightbulb',
      title: "Innovation",
      description: "Nous explorons constamment les nouvelles technologies et méthodologies pour offrir des solutions avant-gardistes à nos clients."
    },
    {
      icon: 'Target',
      title: "Excellence",
      description: "Chaque projet est une opportunité de démontrer notre engagement envers la qualité et la performance exceptionnelle."
    },
    {
      icon: 'Users',
      title: "Collaboration",
      description: "Nous croyons en la force du travail d'équipe et construisons des partenariats durables avec nos clients."
    },
    {
      icon: 'Shield',
      title: "Intégrité",
      description: "La transparence et l'éthique sont au cœur de toutes nos interactions professionnelles."
    },
    {
      icon: 'Rocket',
      title: "Agilité",
      description: "Notre approche flexible nous permet de nous adapter rapidement aux besoins changeants du marché."
    },
    {
      icon: 'Award',
      title: "Expertise",
      description: "Notre équipe de professionnels qualifiés garantit des solutions optimales pour chaque défi."
    }
  ];

  if (loading) {
    return (
      <div className="min-h-screen bg-white">
        <div className="relative bg-gradient-to-r from-[#1E3A8A] to-[#3B82F6] pt-24">
          <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 relative">
            <div className="max-w-3xl animate-pulse">
              <div className="h-8 bg-white/20 rounded w-1/2 mb-4"></div>
              <div className="h-4 bg-white/20 rounded w-2/3"></div>
            </div>
          </div>
          <div className="absolute bottom-0 left-0 right-0 h-16 bg-gradient-to-b from-transparent to-white"></div>
        </div>

        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
          <div className="mb-16 animate-pulse">
            <div className="h-8 bg-gray-200 rounded w-1/3 mb-6"></div>
            <div className="bg-gray-100 p-8 rounded-lg">
              <div className="h-4 bg-gray-200 rounded w-full mb-2"></div>
              <div className="h-4 bg-gray-200 rounded w-5/6"></div>
            </div>
          </div>

          <div className="mb-16">
            <div className="h-8 bg-gray-200 rounded w-1/3 mb-6"></div>
            <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
              {[1, 2, 3, 4, 5, 6].map((i) => (
                <div key={i} className="bg-white p-6 rounded-lg shadow-lg animate-pulse">
                  <div className="flex items-center mb-4">
                    <div className="bg-gray-200 p-3 rounded-lg mr-4 h-12 w-12"></div>
                    <div className="h-6 bg-gray-200 rounded w-1/2"></div>
                  </div>
                  <div className="h-4 bg-gray-200 rounded w-full mb-2"></div>
                  <div className="h-4 bg-gray-200 rounded w-5/6"></div>
                </div>
              ))}
            </div>
          </div>
        </div>
      </div>
    );
  }

  return (
    <div className="min-h-screen bg-white">
      <div className="relative bg-gradient-to-r from-[#1E3A8A] to-[#3B82F6] pt-24">
        <div className="absolute inset-0 overflow-hidden">
          <div className="absolute -inset-[10px] bg-[linear-gradient(45deg,transparent_25%,rgba(68,107,158,0.2)_50%,transparent_75%,transparent_100%)] bg-[length:60px_60px] animate-[gradient_3s_linear_infinite]"></div>
        </div>
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 relative">
          <div className="max-w-3xl">
            <h1 className="text-4xl font-bold text-white mb-4">À propos d'Analytechs</h1>
            <p className="text-xl text-gray-100">
              Découvrez notre vision et nos valeurs pour la transformation digitale
            </p>
          </div>
        </div>
        <div className="absolute bottom-0 left-0 right-0 h-16 bg-gradient-to-b from-transparent to-white"></div>
      </div>

      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div className="mb-16">
          <h2 className="text-3xl font-semibold text-primary mb-6">Notre Vision</h2>
          <div className="bg-gradient-to-r from-primary to-secondary p-8 rounded-lg text-white">
            <p className="text-xl leading-relaxed">
              {content?.vision || "Chez Analytechs, nous croyons en la puissance des données pour transformer les entreprises. Notre mission est d'accompagner les organisations dans leur transformation digitale en leur fournissant des solutions innovantes et sur mesure qui créent une réelle valeur ajoutée."}
            </p>
          </div>
        </div>

        <div className="mb-16">
          <h2 className="text-3xl font-semibold text-primary mb-6">Nos Valeurs</h2>
          <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            {(content?.values || defaultValues).map((value, index) => (
              <div 
                key={index}
                className="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow border border-gray-100"
              >
                <div className="flex items-center mb-4">
                  <div className="bg-primary/10 p-3 rounded-lg mr-4">
                    {iconMap[value.icon]}
                  </div>
                  <h3 className="text-xl font-semibold text-primary">{value.title}</h3>
                </div>
                <p className="text-gray-600 leading-relaxed">
                  {value.description}
                </p>
              </div>
            ))}
          </div>
        </div>

        <div>
          <h2 className="text-3xl font-semibold text-primary mb-6">Notre Expertise</h2>
          <div className="bg-gradient-to-r from-primary to-secondary rounded-lg p-8 text-white">
            <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
              {(content?.expertise || [
                {
                  title: "Business Intelligence",
                  description: "Transformez vos données en insights actionnables pour prendre de meilleures décisions stratégiques."
                },
                {
                  title: "Data Analytics",
                  description: "Exploitez la puissance de vos données avec des analyses avancées et du machine learning."
                },
                {
                  title: "Conseil en Management",
                  description: "Optimisez votre stratégie d'entreprise avec nos conseils experts et notre accompagnement personnalisé."
                }
              ]).map((expertise, index) => (
                <div key={index} className="bg-white/10 backdrop-blur-lg p-6 rounded-lg">
                  <h3 className="text-xl font-semibold mb-3">{expertise.title}</h3>
                  <p className="text-gray-100">
                    {expertise.description}
                  </p>
                </div>
              ))}
            </div>
          </div>
        </div>
      </div>
    </div>
  );
};

export default About;