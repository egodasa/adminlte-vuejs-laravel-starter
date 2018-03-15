let dataMenu = {
	data () {
		return {
			menu : [
					{
						url : '/',
						icon : 'fa fa-dashboard',
						text : 'Halaman 1'
					},
					{
						url : '/vue',
						icon : 'fa fa-dashboard',
						text : 'Halaman 2'
					},
					{
						url : '/vue2',
						icon : 'fa fa-dashboard',
						text : 'Halaman 3'
					},
					{
						url : '/form',
						icon : 'fa fa-dashboard',
						text : 'Contoh Form Modal'
					},
					{
						url : '/tabel',
						icon : 'fa fa-dashboard',
						text : 'Contoh Tabel'
					},
					{
						url : '/tabel',
						icon : 'fa fa-dashboard',
						text : 'Dropdown',
						child : [
							{
								url : '/',
								icon : 'fa fa-dashboard',
								text : 'Halaman 1'
								},
								{
									url : '/vue',
									icon : 'fa fa-dashboard',
									text : 'Halaman 2'
								},
								{
									url : '/vue2',
									icon : 'fa fa-dashboard',
									text : 'Halaman 3'
								},
								{
									url : '/form',
									icon : 'fa fa-dashboard',
									text : 'Contoh Form'
								},
								{
									url : '/tabel',
									icon : 'fa fa-dashboard',
									text : 'Contoh Tabel'
								}
						]
					}
				]
		}
	}
}
