//How to parsing local time in golang
package main

import (
	"fmt"
	"time"
)

func main() {
	timeNow := time.Now()
	tm := time.Now().Local()
	timeToString := tm.Format("2006-01-02")
	fmt.Println("Default Format : ", timeNow)
	fmt.Println("With Local Format : ", timeToString)
}
