import { Injectable } from '@angular/core';
import { HttpClient, HttpParams } from '@angular/common/http';
import { map } from 'rxjs/operators';

import { IItem } from './item.model';

@Injectable({ providedIn: 'root' })
export class ItemService {

      constructor(private http: HttpClient){

      }

      fetchItems(){ 
            return this.http.get<[IItem]>("http://localhost:8080/CRUD/read.php",
            {
                  params: new HttpParams().set("data", "get_units")
            })
            .pipe(map(data => {
                  let items: IItem[] = [];
                  for(let i = 0; i < data.length; i++){
                        let item = new IItem();
                        item.id = data[i].id;
                        item.name = data[i].name;
                        item.image = data[i].image;
                        item.description = data[i].description;
                        item.title = data[i].title;
                        items.push(item);
                  }
                  return items;
            }))
      }
}