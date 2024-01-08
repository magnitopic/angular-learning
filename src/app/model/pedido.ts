export class Pedido {
  nombre: string = '';
  email: string = '';
  direccion: string = '';
  telefono: string = '';
  tarjeta?: number;
  caducidad?: string;
  cvv?: number;
}
