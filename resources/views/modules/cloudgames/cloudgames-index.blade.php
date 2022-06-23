@extends('adminlte::page')



@section('title', 'Inventory')

@section('content_header')
<h1>Dashboard</h1>
@stop

@section('content')
<div id="jsGrid"></div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid-theme.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
@stop

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.js"></script>
<script>
    console.log('Hi!');
</script>
<script>
    $(function() {

        var clients = [{
                "ID": "10001",
                "Name": "Street Fighter",
                "Brand": "Foogames",
                "Games": "xyz",
                "Operator": "operator-01",
                "Shop": "shop-01",
                "Player": "player-01",
                "Locked": true,
                "Online": true,
                "Busy": false
            },
            {
                "ID": "10002",
                "Name": "MultiScreen Puzzle",
                "Brand": "bargames",
                "Games": "xyz",
                "Operator": "operator-02",
                "Shop": "shop-03",
                "Player": "",
                "Locked": false,
                "Online": true,
                "Busy": false
            },
            {
                "ID": "10002",
                "Name": "MultiScreen Puzzle",
                "Brand": "bargames",
                "Games": "xyz",
                "Operator": "",
                "Shop": "",
                "Player": "",
                "Locked": false,
                "Online": true,
                "Busy": false
            }
        ];

        var games = '{"Street Fighter 2","Street Fighter 2 Turbo","Street Fighter 5"}';


        var operators = [{
                Name: "",
                ID: 0
            },

            {
                Name: "operator-01",
                ID: 1001
            },
            {
                Name: "operator-02",
                ID: 1002
            },
            {
                Name: "operator-sub-01",
                ID: 1003
            }
        ];

        var shops = [{
                Name: "",
                ID: 0
            },

            {
                Name: "shop-01",
                ID: 1001
            },
            {
                Name: "shop-02",
                ID: 1002
            },
            {
                Name: "shop-03",
                ID: 1003
            }
        ];

        var players = [{
                Name: "",
                ID: 0
            },


            {
                Name: "player-01",
                ID: 1001
            },
            {
                Name: "player-02",
                ID: 1002
            },
            {
                Name: "player-03",
                ID: 1003
            }
        ];

        $("#jsGrid").jsGrid({
            width: "90%",
            height: "400px",

            inserting: false,
            filtering: true,
            editing: true,
            sorting: true,
            paging: true,
            autoload: true,

            pageSize: 15,


            controller: {
                loadData: function(filter) {
                    return $.grep(
                        clients,
                        function(client) {
                            return (
                                (!filter.ID || client.ID.indexOf(filter.ID) > -1) &&
                                (!filter.Name || client.Name.indexOf(filter.Name) > -1) &&
                                (!filter.Brand || client.Brand.indexOf(filter.Brand) > -1) &&
                                (!filter.Operator || client.Operator.indexOf(filter.Operator) > -1) &&
                                (!filter.Shop || client.Shop.indexOf(filter.Shop) > -1) &&
                                (!filter.Player || client.Player.indexOf(filter.Player) > -1) &&
                                (!filter.Locked || client.Locked === filter.Locked) &&
                                (!filter.Online || client.Online === filter.Online) &&
                                (!filter.Busy || client.Busy === filter.Busy)
                            );
                        });
                },
                updateItem: function() {
                    console.log(arguments);
                },

            },


            data: clients,

            fields: [{
                    name: "ID",
                    title: "ID",
                    width: 50,
                    readOnly: true,
                    sorting: true
                },
                {
                    name: "Name",
                    readOnly: true,
                    sorting: true
                },
                {
                    name: "Brand",
                    readOnly: true,
                    sorting: true
                },
                {
                    name: "Games",
                    width: 50,
                    readOnly: true,
                    sorting: false,
                    itemTemplate: function(value, item) {
                        return $("<button>").text("Show")
                            .on("click", function() {
                                alert(games);
                                return false;
                            });
                    }
                },
                {
                    name: "Operator",
                    type: "select",
                    items: operators,
                    valueField: "Name",
                    textField: "Name",
                    title: "Operator",
                    sorting: true
                },
                {
                    name: "Shop",
                    type: "select",
                    items: shops,
                    valueField: "Name",
                    textField: "Name",
                    title: "Shop",
                    sorting: true
                },
                {
                    name: "Player",
                    type: "select",
                    items: players,
                    valueField: "Name",
                    textField: "Name",
                    title: "Player",
                    sorting: true
                },
                {
                    name: "Locked",
                    type: "checkbox",
                    title: "Locked",
                    sorting: true
                },
                {
                    name: "Online",
                    type: "checkbox",
                    title: "Online",
                    readOnly: true,
                    editing: false,
                    sorting: true
                },
                {
                    name: "Busy",
                    type: "checkbox",
                    title: "Busy",
                    readOnly: true,
                    editing: false,
                    sorting: true
                },
                {
                    type: "control",
                    editButton: true,
                    deleteButton: false,
                    clearFilterButton: true,
                    modeSwitchButton: true
                }
            ]
        });


    });
</script>
@stop