import { Routes } from '@angular/router';
import { ListadoComponent } from './listado/listado.component';
import { DetallesComponent } from './detalles/detalles.component';
import { CarritoComponent } from './carrito/carrito.component';

export const routes: Routes = [
  { path: 'listado', component: ListadoComponent },
  { path: 'detalles/:id', component: DetallesComponent },
  { path: 'carrito', component: CarritoComponent },
];
