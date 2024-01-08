import { Component } from '@angular/core';
import { Pedido } from '../model/pedido';
import { FormsModule } from '@angular/forms';
import { TiendaService } from '../services/tienda.service';
import { Router } from '@angular/router';

@Component({
  selector: 'app-pedido',
  standalone: true,
  imports: [FormsModule],
  templateUrl: './pedido.component.html',
  styleUrl: './pedido.component.css',
})
export class PedidoComponent {
  pedido: Pedido = {} as Pedido;

  constructor(private servicioTienda: TiendaService, private router:Router) {}

  finalizarPedido() {
    console.log('mandar al servidor: ');
    console.log(this.pedido);
    this.servicioTienda
      .registrarPedido(this.pedido)
      .subscribe((res) =>
        res == 'ok' ? this.pedidoOK() : alert('Error al registrar el pedido')
      );
  }
  pedidoOK() {
    alert('Pedido realizado correctamente');
    this.router.navigate(['listado']);
  }
}
