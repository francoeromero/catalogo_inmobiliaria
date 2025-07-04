import React, { useState } from 'react';
import { Helmet } from 'react-helmet';
import { motion } from 'framer-motion';
import { Phone, Mail, MapPin, Clock, Send, MessageCircle } from 'lucide-react';
import { useToast } from '@/components/ui/use-toast';

const ContactPage = () => {
  const { toast } = useToast();
  const [formData, setFormData] = useState({
    name: '',
    email: '',
    phone: '',
    subject: '',
    message: ''
  });

  const contactInfo = [
    { icon: Phone, title: 'Teléfono', details: ['+54 11 5148-7328', '+54 11 5376 7216'], color: 'text-blue-400' },
    { icon: Mail, title: 'Email', details: ['info@rcpropiedades.com', 'estudiorc.proyectoyobras@gmail.com '], color: 'text-green-400' },
    { icon: MapPin, title: 'Dirección', details: ['Dorrego 2486', 'Buenos Aires, Argentina'], color: 'text-purple-400' },
    { icon: Clock, title: 'Horarios', details: ['Lun - Vie: 9:00 AM - 6:00 PM', 'Sáb: 9:00 AM - 2:00 PM'], color: 'text-yellow-400' }
  ];

  const handleInputChange = (e) => {
    const { name, value } = e.target;
    setFormData(prev => ({ ...prev, [name]: value }));
  };

  const handleSubmit = (e) => {
    e.preventDefault();
    toast({
      title: "🚧 Esta funcionalidad no está implementada aún",
      description: "¡No te preocupes! Puedes solicitarla en tu próximo prompt! 🚀"
    });
    setFormData({ name: '', email: '', phone: '', subject: '', message: '' });
  };

  return (
    <div className="min-h-screen py-8">
      <Helmet>
        <title>Contacto - RC PROPIEDADES</title>
        <meta name="description" content="Ponte en contacto con RC PROPIEDADES. Estamos aquí para ayudarte a encontrar la propiedad perfecta." />
      </Helmet>

      <div className="container mx-auto px-4 sm:px-6 max-w-6xl">
        <motion.div className="text-center mb-16" initial={{ opacity: 0, y: -20 }} animate={{ opacity: 1, y: 0 }} transition={{ duration: 0.6 }}>
          <div className="flex items-center justify-center mb-4">
            <Phone className="w-8 h-8 text-red-400 mr-3" />
            <h1 className="text-3xl sm:text-4xl font-bold text-black/70">Contacto</h1>
          </div>
          <p className="text-black/70 text-base sm:text-lg max-w-2xl mx-auto">
            Estamos aquí para ayudarte. Ponte en contacto con nosotros y nuestro equipo <br /> de expertos te asistirá en encontrar la propiedad perfecta.
          </p>
        </motion.div>

        <div className="max-w-5xl mx-auto">
          <motion.div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12" initial={{ opacity: 0, y: 20 }} animate={{ opacity: 1, y: 0 }} transition={{ duration: 0.6 }}>
            {contactInfo.map((info, index) => (
              <motion.div key={index} className="glass-effect rounded-xl p-6 text-center" initial={{ opacity: 0, y: 20 }} animate={{ opacity: 1, y: 0 }} transition={{ duration: 0.5, delay: index * 0.1 }}>
                <info.icon className={`w-8 h-8 ${info.color} mx-auto mb-4`} />
                <h3 className="text-lg font-semibold text-black mb-3">{info.title}</h3>
                {info.details.map((detail, idx) => (
                  <p key={idx} className="text-black/70 text-sm">{detail}</p>
                ))}
              </motion.div>
            ))}
          </motion.div>

          <div className="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <motion.div initial={{ opacity: 0, x: -20 }} animate={{ opacity: 1, x: 0 }} transition={{ duration: 0.6, delay: 0.2 }}>
              <div className="glass-effect rounded-xl p-6 sm:p-8">
                <h2 className="text-2xl font-bold text-black/70 mb-6 text-center">Envíanos un Mensaje</h2>
                <form onSubmit={handleSubmit} className="space-y-6">
                  <div className="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <input type="text" name="name" value={formData.name} onChange={handleInputChange} required className="form-input" placeholder="Tu nombre completo" />
                    <input type="email" name="email" value={formData.email} onChange={handleInputChange} required className="form-input" placeholder="tu@email.com" />
                  </div>
                  <div className="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <input type="tel" name="phone" value={formData.phone} onChange={handleInputChange} className="form-input" placeholder="+1 (555) 123-4567" />
                    <select name="subject" value={formData.subject} onChange={handleInputChange} required className="form-input">
                      <option value="">Selecciona un asunto</option>
                      <option value="compra">Consulta de Compra</option>
                      <option value="alquiler">Consulta de Alquiler</option>
                      <option value="venta">Quiero Vender mi Propiedad</option>
                      <option value="inversion">Oportunidades de Inversión</option>
                      <option value="otro">Otro</option>
                    </select>
                  </div>
                  <textarea name="message" value={formData.message} onChange={handleInputChange} required rows={5} className="form-input resize-none" placeholder="Cuéntanos cómo podemos ayudarte..." />
                <a
                  href="https://wa.me/541151487328"
                  target="_blank"
                  rel="noopener noreferrer"
                  className="w-full"
                >
                  <button className="btn-primary w-full flex items-center justify-center space-x-2">
                    <Send className="w-5 h-5" />
                    <span>Enviar Mensaje</span>
                  </button>
                </a>
                </form>
              </div>
            </motion.div>

            <motion.div initial={{ opacity: 0, x: 20 }} animate={{ opacity: 1, x: 0 }} transition={{ duration: 0.6, delay: 0.4 }} className="space-y-6">
              <div className="glass-effect rounded-xl p-6">
                <h3 className="text-xl font-semibold text-black/70 mb-4 flex items-center">
                  <MessageCircle className="w-6 h-6 text-blue-400 mr-3" />¿Necesitas Ayuda Inmediata?
                </h3>
                <p className="text-black/70 mb-4">Nuestro equipo de atención al cliente está disponible para resolver todas tus dudas sobre propiedades, financiamiento y procesos de compra o alquiler.</p>

                <a
                  href="https://wa.me/541151487328"
                  target="_blank"
                  rel="noopener noreferrer"
                >
                  <button className="btn-primary w-full">Hablar con un Asesor</button>
                </a>
              </div>
              <div className="glass-effect rounded-xl p-6">
                <h3 className="text-xl font-semibold text-black/70 mb-4">Horarios de Atención</h3>
                <div className="space-y-3">
                  <div className="flex justify-between items-center"><span className="text-black/70">Lunes - Viernes</span><span className="text-black font-medium">9:00 AM - 6:00 PM</span></div>
                  <div className="flex justify-between items-center"><span className="text-black/70">Sábados</span><span className="text-black font-medium">9:00 AM - 2:00 PM</span></div>
                  <div className="flex justify-between items-center"><span className="text-black/70">Domingos</span><span className="text-black/60">Cerrado</span></div>
                </div>
              </div>
              <div className="glass-effect rounded-xl p-6">
                <h3 className="text-xl font-semibold text-black/70 mb-4">Síguenos</h3>
                <p className="text-black/70 mb-4">Mantente al día con las últimas propiedades y noticias del mercado inmobiliario.</p>
                <div className="flex space-x-3 ">
                  <button className="btn-secondary flex-1">
                    <a
                      href="https://www.facebook.com/estudioRC.ArqyDesarrollos"
                      target="_blank"
                      rel="noopener noreferrer"
                      className="btn-secondary flex-1 text-center"
                    >
                      Facebook
                    </a>
                    </button>
                  <button className="btn-secondary flex-1"><a
  href="https://www.instagram.com/estudio__rc/"
  target="_blank"
  rel="noopener noreferrer"
  className="btn-secondary flex-1 text-center"
>
  Instagram
</a></button>
                  <button className="btn-secondary flex-1"><a
  href="https://www.linkedin.com/in/tu_perfil"
  target="_blank"
  rel="noopener noreferrer"
  className="btn-secondary flex-1 text-center"
>
  LinkedIn
</a></button>
                </div>
              </div>
            </motion.div>
          </div>

          <motion.div className="mt-12" initial={{ opacity: 0, y: 20 }} animate={{ opacity: 1, y: 0 }} transition={{ duration: 0.6, delay: 0.6 }}>
            <div className="glass-effect rounded-xl p-6 sm:p-8">
              <h2 className="text-2xl font-bold text-black/70 mb-6 text-center">Nuestra Ubicación</h2>
              <div className="w-full h-64 sm:h-96 overflow-hidden rounded-xl">


<a href="https://maps.app.goo.gl/3GKrBMLq1Xg4Ctxr5" target="_blank" rel="noopener noreferrer">
  <img
    src="https://github.com/francoeromero/catalogo_inmobiliaria/blob/main/img/map.jpg?raw=true"
    alt="Ubicación en Google Maps"
    style={{ width: '100%', height: 'auto', borderRadius: '0.75rem' }}
  />
</a>

              </div>
              <div className="mt-4 text-center">
                <a href="https://maps.app.goo.gl/3GKrBMLq1Xg4Ctxr5" target="_blank" rel="noopener noreferrer" className="text-blue-600 hover:underline text-sm">
                  Ver en Google Maps
                </a>
              </div>
            </div>
          </motion.div>
        </div>
      </div>
    </div>
  );
};

export default ContactPage;
