'analytics/main'.log('module active!')

const run = async () => {
    
    const result = await 'analytics/main'.json({
        test: true,
    })

    'analytics/main'.log('/m/analytics/main result:', result)
}

run()
