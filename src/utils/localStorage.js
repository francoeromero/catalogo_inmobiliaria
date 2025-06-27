
const STORAGE_KEY = 'properties_data';

const sampleProperties = [
  {
    id: 1,
    title: "Casa Moderna en Zona Residencial Premium",
    location: "Zona Norte, Ciudad",
    price: 450000,
    type: "Casa",
    operation: "Venta",
    bedrooms: 4,
    bathrooms: 3,
    area: 280,
    description: "Hermosa casa moderna con acabados de lujo, jardín amplio y piscina. Ubicada en una zona residencial exclusiva con excelente conectividad.",
    image: "https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?w=800&h=600&fit=crop&crop=center"
  },
  {
    id: 2,
    title: "Apartamento de Lujo con Vista al Mar",
    location: "Costa Azul, Playa Central",
    price: 2500,
    type: "Apartamento",
    operation: "Alquiler",
    bedrooms: 3,
    bathrooms: 2,
    area: 150,
    description: "Espectacular apartamento con vista panorámica al mar, balcón amplio y amenidades de primera clase. Perfecto para vivir o invertir.",
    image: "https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?w=800&h=600&fit=crop&crop=center"
  },
  {
    id: 3,
    title: "Villa Mediterránea con Piscina Infinita",
    location: "Colinas del Sol, Sector Exclusivo",
    price: 750000,
    type: "Villa",
    operation: "Venta",
    bedrooms: 5,
    bathrooms: 4,
    area: 420,
    description: "Impresionante villa de estilo mediterráneo con piscina infinita, jardines paisajísticos y vistas espectaculares de la ciudad.",
    image: "https://images.unsplash.com/photo-1613490493576-7fde63acd811?w=800&h=600&fit=crop&crop=center"
  },
  {
    id: 4,
    title: "Penthouse Contemporáneo en el Centro",
    location: "Centro Financiero, Torre Premium",
    price: 4200,
    type: "Penthouse",
    operation: "Alquiler",
    bedrooms: 3,
    bathrooms: 3,
    area: 200,
    description: "Exclusivo penthouse en el corazón de la ciudad con terraza privada, jacuzzi y vistas de 360 grados. Diseño contemporáneo único.",
    image: "https://images.unsplash.com/photo-1512917774080-9991f1c4c750?w=800&h=600&fit=crop&crop=center"
  },
  {
    id: 5,
    title: "Estudio Moderno para Jóvenes Profesionales",
    location: "Distrito Universitario, Zona Comercial",
    price: 95000,
    type: "Estudio",
    operation: "Venta",
    bedrooms: 1,
    bathrooms: 1,
    area: 45,
    description: "Estudio completamente equipado y amueblado, ideal para estudiantes y jóvenes profesionales. Excelente ubicación y precio accesible.",
    image: "https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?w=800&h=600&fit=crop&crop=center"
  },
  {
    id: 6,
    title: "Casa Familiar con Jardín Amplio",
    location: "Barrio Residencial Los Pinos",
    price: 1800,
    type: "Casa",
    operation: "Alquiler",
    bedrooms: 4,
    bathrooms: 2,
    area: 220,
    description: "Perfecta casa familiar con jardín amplio, garage para dos autos y área de juegos. Ideal para familias que buscan tranquilidad.",
    image: "https://images.unsplash.com/photo-1570129477492-45c003edd2be?w=800&h=600&fit=crop&crop=center"
  },
  {
    id: 7,
    title: "Apartamento Ejecutivo Amueblado",
    location: "Zona Empresarial, Torre Corporativa",
    price: 180000,
    type: "Apartamento",
    operation: "Venta",
    bedrooms: 2,
    bathrooms: 2,
    area: 85,
    description: "Moderno apartamento completamente amueblado, perfecto para ejecutivos. Incluye gimnasio, piscina y servicio de conserjería 24/7.",
    image: "https://images.unsplash.com/photo-1502672260266-1c1ef2d93688?w=800&h=600&fit=crop&crop=center"
  },
  {
    id: 8,
    title: "Casa de Campo con Viñedo",
    location: "Valle Verde, Zona Rural",
    price: 3500,
    type: "Casa",
    operation: "Alquiler",
    bedrooms: 6,
    bathrooms: 4,
    area: 380,
    description: "Espectacular casa de campo con viñedo propio, caballerizas y amplios espacios verdes. Perfecta para escapadas de fin de semana.",
    image: "https://images.unsplash.com/photo-1564013799919-ab600027ffc6?w=800&h=600&fit=crop&crop=center"
  }
];

export const getProperties = () => {
  try {
    const stored = localStorage.getItem(STORAGE_KEY);
    if (stored) {
      return JSON.parse(stored);
    } else {
      saveProperties(sampleProperties);
      return sampleProperties;
    }
  } catch (error) {
    console.error('Error loading properties:', error);
    return sampleProperties;
  }
};

export const saveProperties = (properties) => {
  try {
    localStorage.setItem(STORAGE_KEY, JSON.stringify(properties));
    return true;
  } catch (error) {
    console.error('Error saving properties:', error);
    return false;
  }
};

export const addProperty = (property) => {
  const properties = getProperties();
  const newProperty = {
    ...property,
    id: Date.now(),
    createdAt: new Date().toISOString()
  };
  properties.push(newProperty);
  saveProperties(properties);
  return newProperty;
};

export const updateProperty = (id, updatedProperty) => {
  const properties = getProperties();
  const index = properties.findIndex(p => p.id === id);
  if (index !== -1) {
    properties[index] = { ...properties[index], ...updatedProperty };
    saveProperties(properties);
    return properties[index];
  }
  return null;
};

export const deleteProperty = (id) => {
  const properties = getProperties();
  const filteredProperties = properties.filter(p => p.id !== id);
  saveProperties(filteredProperties);
  return filteredProperties;
};

export const getPropertyById = (id) => {
  const properties = getProperties();
  return properties.find(p => p.id === parseInt(id));
};
