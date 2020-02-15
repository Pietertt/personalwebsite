import { Component, OnInit } from '@angular/core';
import { ItemService } from './../item.service';
import { HttpClient } from '@angular/common/http';

import { IItem } from './../item.model';

@Component({
      selector: 'app-portfolio',
      templateUrl: './portfolio.component.html',
      styleUrls: ['./portfolio.component.css']
})

export class PortfolioComponent implements OnInit {

      items: IItem[] = [];

      constructor(private itemService: ItemService, private http: HttpClient) { }

      ngOnInit() {
            this.getItems();
      }

      getItems() {
            this.itemService.fetchItems().subscribe(data => {
                  for(let i = 0; i < data.length; i++){
                        this.items.push(data[i]);
                  }
            });
      }

}
