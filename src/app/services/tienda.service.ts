import { Injectable } from '@angular/core';
import { Disco } from '../model/disco';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root',
})
export class TiendaService {
  ruta_webservices = '/entregas/servicio_ajax/web_services/';

  //ruta_webservices = "/web_services/";

  constructor(private http: HttpClient) {}

  obtenerDiscos(): Observable<Disco[]> {
    console.log('Obteniendo discos...');
    return this.http.get<Disco[]>(this.ruta_webservices + 'discos.php');
  }
}
