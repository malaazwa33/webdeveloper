package main

import "log"

//Car : struct => for saving data Car
type Car struct {
	Merk  string
	Speed int
	Type  string
}

//main : run code
func main() {
	//append data onto Car Struct
	c := Car{
		Merk:  "Toyota Supra",
		Speed: 7,
		Type:  "v-10.1",
	}
	//print data Car from struct
	log.Printf("Car Merk : %s\n", c.Merk)
	log.Printf("Car Speed : %d\n", c.Speed)
	log.Printf("Car Type: %s", c.Type)
}
