package lowercase

// #include <Zend/zend_types.h>
import "C"

import (
	"unicode"
	"unsafe"

	"github.com/dunglas/frankenphp"
)

// export_php:function scriptling_analytics_lowercase(string $value): string
func scriptling_analytics_lowercase(value *C.zend_string) unsafe.Pointer {
	input := []rune(frankenphp.GoString(unsafe.Pointer(value)))
	for index, char := range input {
		input[index] = unicode.ToLower(char)
	}

	return frankenphp.PHPString(string(input), false)
}
