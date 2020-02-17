import { Injectable } from '@angular/core';
import { HttpClient, HttpParams } from '@angular/common/http';
import { map } from 'rxjs/operators';

import { IItem } from './item.model';

@Injectable({ providedIn: 'root' })
export class ItemService {

      constructor(private http: HttpClient){

      }

      fetchItems(amount: number){ 
            return this.http.get<[IItem]>("http://localhost:8080/CRUD/read.php",
            {
                  params: new HttpParams().set("data", "get_items").set("amount", amount.toString())
            })
            .pipe(map(data => {
                  let items: IItem[] = [];
                  for(let i = 0; i < data.length; i++){
                        let item = new IItem();
                        item.id = data[i].id;
                        item.title = data[i].title;
                        item.description = data[i].description;
                        item.status = data[i].status;
                        item.image = data[i].image;
                        item.link = data[i].link;
                        item.story = data[i].story;
                        items.push(item);
                  }
                  return items;
            }))
      }

      fetchItem(id: number){
            return this.http.get<IItem>("http://localhost:8080/CRUD/read.php", 
            {
                  params: new HttpParams().set("data", "get_item").set("id", id.toString())
            })
            .pipe(map(data => {
                  let item = new IItem();
                  item.id = data.id;
                  item.title = data.title;
                  item.description = data.description;
                  item.image = data.image;
                  item.link = data.link;
                  item.story = data.story;
                  item.status = data.status;
                  return item;
            }))
      }
}