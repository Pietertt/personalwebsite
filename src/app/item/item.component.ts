import { Component, OnInit } from '@angular/core';
import { ActivatedRoute } from '@angular/router';
import { ItemService } from './../item.service';
import { HttpClient } from '@angular/common/http';

import { IItem } from './../item.model';

@Component({
  selector: 'app-item',
  templateUrl: './item.component.html',
  styleUrls: ['./item.component.css']
})
export class ItemComponent implements OnInit {

      item: IItem;

  constructor(private route: ActivatedRoute, private itemService: ItemService) { }

  ngOnInit() {
        this.itemService.fetchItem(this.route.snapshot.params["id"]).subscribe(response => {
            this.item = response;
        });
  }

}
