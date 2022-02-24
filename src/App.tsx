import React from 'react';
import { BrowserRouter } from 'react-router-dom';

import Routes from './routes';

const App: React.FC = () => (
  <BrowserRouter>
    <Routes path="/" exact component={Dashboard} />
    <Routes path="/repository" component={Repository} />
  </BrowserRouter>
);

export default App;
